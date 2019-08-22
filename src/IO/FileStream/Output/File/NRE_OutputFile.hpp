
    /**
     * @file NRE_OutputFile.hpp
     * @brief Declaration of Engine's IO's Object : OutputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include "../../NRE_FileStream.hpp"
    #include "../Stream/NRE_OutputStream.hpp"

     /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace IO
         * @brief IO's API
         */
        namespace IO {

            /**
             * @class OutputFile
             * @brief Manage output file stream
             */
            class OutputFile : public FileStream, public OutputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default Constructor
                         */
                        OutputFile() = delete;
                        /**
                         * Construct an output file stream with a given file's path
                         * @param p the file's stream path
                         */
                        OutputFile(File const& p);

                    //## Move-Constructor ##//
                        /**
                         * Move o into this
                         * @param o the output file to move
                         */
                        OutputFile(OutputFile && o) = default;

                    //## Deconstructor ##//
                        /**
                         * OutputFile Deconstructor
                         */
                        virtual ~OutputFile() = default;

                    //## Getter ##//
                        /**
                         * @return the output file stream opening mode
                         */
                        virtual std::ios_base::openmode getMode() const override;
                        /**
                         * @return the output file's stream
                         */
                        virtual std::fstream& getStream() override;

                    //## Assignment Operator ##//
                        /**
                         * Move assignment of o into this
                         * @param o the output file to move
                         * @return  the reference of himself
                         */
                        OutputFile& operator =(OutputFile && o) = default;
            };
        }
    }

    #include "NRE_OutputFile.tpp"
