
    /**
     * @file NRE_BinaryOutputFile.tpp
     * @brief Implementation of Engine's IO's Object : BinaryOutputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline BinaryOutputFile::BinaryOutputFile(File const& p) : OutputFile(p) {
            }

            inline std::ios_base::openmode BinaryOutputFile::getMode() const {
                return std::ios::out | std::ios::binary;
            }

            inline std::fstream& BinaryOutputFile::getStream() {
                return OutputFile::getStream();
            }

        }
    }
