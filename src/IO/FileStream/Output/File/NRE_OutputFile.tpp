
    /**
     * @file NRE_OutputFile.tpp
     * @brief Implementation of Engine's IO's Object : OutputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline OutputFile::OutputFile(File const& p) : FileStream::FileStream(p) {
            }

            inline std::ios_base::openmode OutputFile::getMode() const {
                return std::ios::out;
            }

            inline std::fstream& OutputFile::getStream() {
                return FileStream::getStream();
            }

        }
    }
